'use strict';

module.exports = {
	theme: {
		slug: 'developers',
		name: 'Developers Genesis powered child theme.',
		author: 'Robert Gadon'
	},
	dev: {
		browserSync: {
			live: true,
			proxyURL: 'belcantostlcopy.local:8888',
			bypassPort: '8181'
		},
		browserslist: [ // See https://github.com/browserslist/browserslist
			'> 1%',
			'last 2 versions'
		],
		debug: {
			styles: false, // Render verbose CSS for debugging.
			scripts: false // Render verbose JS for debugging.
		}
	},
	export: {
		compress: true
	}
};
