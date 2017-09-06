module.exports = {
	/**
	 * grunt-sass
	 *
	 * Compile Sass to CSS using node-sass
	 *
	 * @link https://www.npmjs.com/package/grunt-sass
	 */
	php: {
		src: ['*.php', 'admin/*.php', 'includes/*.php']
	},
	js: {
		src: ['src/js/*.js']
	},
	css: {
		src: ['css/*.css', 'admin/*.css']
	},
	options: {
		bin: "vendor/bin/phpcbf --extensions=php,css,js --ignore=\"*/vendor/*,*/grunt/*,*/node_modules/*,*/bower_components/*\"",
		standard: "phpcs.ruleset.xml"
	}
};
