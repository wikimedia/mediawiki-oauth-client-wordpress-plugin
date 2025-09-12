# MediaWiki OAUTH WordPress Plugin

Developed by [Bradley Morris](mailto:hello@bradleymorris.co.uk) [Human Made](https://humanmade.com) and the [Wikimedia Foundation](https://wikimediafoundation.org). Maintained by [Human Made](https://humanmade.com) and the [Wikimedia Foundation](https://wikimediafoundation.org).

Stable tag: 

## Development


----


## Release Process

### Versioning

This plugin follows [Semantic Versioning](https://semver.org/).

In a nutshell, this means that **patch releases**, for example, 1.2.3, only contain **backwards compatible bug fixes**.
**Minor releases**, for example, 1.2.0, may contain **enhancements, new features, tests**, and pretty much everything that **does not break backwards compatibility**.
Every **breaking change** to public APIs—be it renaming or even deleting structures intended for reuse, or making backwards-incompatible changes to certain functionality—warrants a **major release**, for example, 2.0.0.

If you are using Composer to pull this plugin into your website build, choose your version constraint accordingly.

Even when bumping a major version, if the blocks provided by this plugin change in a backwards-incompatible way, a [block deprecation](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-deprecation/) should be added to let users migrate their visualizations to the new version of the block.

### Publishing a Release

Release builds are handled via a GitHub action which incrementally builds all merges to the `main` branch into a separate `release` branch that bundles its required OAuth dependencies into a local `vendor/` folder within the plugin directory.

The `release` branch may then be tagged for versioned installation via [composer](http://getcomposer.org/), and optionally marked as releases in GitHub for download. A project may also be set up to track the `dev-release` branch to always pull in the latest built beta version.

To prepare a full plugin release,

- Create a pull request "Prepare release vX.Y.Z" with a commit that increments the [plugin.php](./plugin.php) version number, _e.g._ v1.2.3
- Merge your approved release-preparation PR into the `main` branch
- Navigate to the [Tag and Release action within the GitHub Actions tab](https://github.com/wikimedia/mediawiki-oauth-client-wordpress-plugin/actions/workflows/tag-and-release.yml)
- Click the "run workflow" button in the dispatch trigger banner, and fill in the same version as you specified in `plugin.php`, _e.g._ v1.2.3
- Click "Run workflow" button

This should tag your release branch and create a [GitHub release](https://github.com/wikimedia/mediawiki-oauth-client-wordpress-plugin/releases).
