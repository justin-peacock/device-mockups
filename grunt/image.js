module.exports = {
	/**
	 * grunt-image
	 *
	 * Optimize PNG, JPEG, GIF, SVG images with grunt task.
	 *
	 * @link https://www.npmjs.com/package/grunt-image
	 */
	assets: {
		files: [{
			expand: true,
			cwd: '../assets/',
			src: ['**/*.{png,jpg,gif,svg}'],
			dest: '../assets/'
		}]
	},
	images: {
		files: [{
			expand: true,
			cwd: 'images/',
			src: ['**/*.{png,jpg,gif,svg}'],
			dest: 'images/'
		}]
	}
};
