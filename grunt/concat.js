module.exports = {
	/**
	 * grunt-contrib-concat
	 *
	 * Concatenate files.
	 *
	 * Concatenates an array of js files set in /grunt/vars.js
	 *
	 * @link https://www.npmjs.com/package/grunt-contrib-concat
	 */
	options: {
		banner: '/**\n' +
		' * @package Device_Mockups\n' +
		' * @version <%= package.version %>\n' +
		' */\n' +
		'\n'
	},
	main: {
		src: [
			'bower_components/slick-carousel/slick/slick.js',
			'src/js/_init.js'
		],
		dest: 'js/device-mockups.js'
	},
	admin: {
		src: [
			'src/js/_editor.js'
		],
		dest: 'admin/device-mockups.js'
	}
};
