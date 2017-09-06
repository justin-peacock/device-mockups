module.exports = {
	/**
	 * grunt-sass
	 *
	 * Compile Sass to CSS using node-sass
	 *
	 * @link https://www.npmjs.com/package/grunt-sass
	 */
	dist: {
		options: {
			sourceMap: false,
			// @link https://make.wordpress.org/core/handbook/best-practices/coding-standards/css/
			indentType: 'tab',
			includePaths: [
				'bower_components/slick-carousel/slick'
			],
			outputStyle: 'expanded'
		},
		files: {
			'css/device-mockups.css': 'src/sass/device-mockups.scss',
			'admin/device-mockups.css': 'src/sass/device-mockups-admin.scss'
		}
	}
};
