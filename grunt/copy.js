module.exports = {
	/**
	 * grunt-contrib-copy
	 *
	 * Copy files and folders
	 *
	 * @link https://www.npmjs.com/package/grunt-contrib-copy
	 */
	build: {
		expand: true,
		src: [
			'**',
			'!**/.*',
			'!bower_components/**',
			'!dist/**',
			'!src/**',
			'!node_modules/**',
			'!grunt/**',
			'!Gruntfile.js',
			'!bower.json',
			'!package.json',
			'!package-lock.json',
			'!phpcs.ruleset.xml',
			'!composer.json',
			'!composer.lock',
			'!vendor/**'
		],
		dest: 'dist/<%= package.name %>/'
	},
	dist: {
		expand: true,
		cwd: 'dist/<%= package.name %>/',
		src: ['**'],
		dest: '../tags/<%= package.version %>/'
	}
};
