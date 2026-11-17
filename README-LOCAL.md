# GLPI 11 — entorno local (Docker)

Replica de helpdesk para desarrollar Nexus / MCP. **No incluye** `files/` de producción.

## Puertos

| Servicio | Host | Dentro de Docker |
|----------|------|------------------|
| Web GLPI | http://localhost:8888 | app:80 |
| MySQL | localhost:**8889** | db:3306 |
| API REST | http://localhost:8888/apirest.php | — |

Nexus (`tt-nexus`) espera BD en `host.docker.internal:8889` / `glpi_11_0819_1528` / `root`/`root`.

## Arranque

```bash
cd glpi_11
docker compose up -d --build
```

Importar dump (si la BD está vacía):

```bash
gzip -dc ../backups/glpi_11_*.sql.gz \
  | sed 's/`glpi_11`/`glpi_11_0819_1528`/g' \
  | docker compose exec -T db mysql -uroot -proot --max_allowed_packet=256M glpi_11_0819_1528
```

`config/config_db.php` apunta al servicio `db`. `glpicrypt.key` debe ser el de prod (ya copiado) para que los campos cifrados cuadren con el dump.

## Notas

- Plugin **Additional Fields** (`fields`) viene en el dump (`state=1`).
- Tras importar, `url_base` en `glpi_configs` se ajusta a `http://localhost:8888`.
- No sincronizar `files/` desde prod.
