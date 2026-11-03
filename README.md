# CommunityGrowth360

The site is published on GitHub Pages as static HTML. Its PHP templates are
rendered locally to `.html` pages before publishing; GitHub Pages does not run
PHP.

To rebuild the published pages after editing a PHP template, run:

```powershell
php _scripts/build-static.php
```

Commit the generated `.html` files along with template changes. The contact
form remains embedded from the external form provider.