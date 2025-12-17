# Link in Bio (Netlify + Netlify CMS)

Single-page link hub styled like the provided screenshot, editable via `/admin` using Decap (Netlify) CMS with Git Gateway. Content lives in `content/data.json`; no custom backend needed.

## Local setup
1. Install a simple static server (e.g. `npm install -g serve`) or open with Live Server.
2. Run from project root: `serve .` (or your preferred static server).
3. Visit `http://localhost:3000/` (port may differ).

## Editing content (admin)
Netlify CMS is preconfigured:
- Admin UI: `/admin`
- Config: `admin/config.yml`
- Content file: `content/data.json`
- Uploads: `/uploads`

### Netlify Identity + Git Gateway (production)
1. Deploy this repo to Netlify.
2. In Netlify dashboard: Site settings → Identity → Enable Identity.
3. Identity settings: Enable Git Gateway.
4. Invite yourself as a user (you get a magic-link email). Log in once.
5. Open `https://<your-site>.netlify.app/admin/` to edit content. Saving commits to your repo triggers a new deploy.

### Local CMS preview
Run a local server, then visit `/admin`. For full Git Gateway flow locally, use `npx decap-server` in another terminal (optional).

## Files of interest
- `index.html` — renders the link page and fetches `content/data.json`.
- `assets/style.css` — styles for the layout/buttons.
- `content/data.json` — editable content source.
- `admin/config.yml` — CMS schema (fields for profile, socials, and CTAs).
- `netlify.toml` — publish config and `/admin` redirect helper.

## Customization tips
- Update colors/fonts in `assets/style.css`.
- Add/remove social platforms by updating the `socialIcons` map in `index.html` and the CMS fields in `admin/config.yml`.
- Replace the default logo at `assets/logo.svg` or upload a new one via the CMS (it will be stored in `/uploads`).

