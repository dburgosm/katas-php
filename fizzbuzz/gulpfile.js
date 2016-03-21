var gulp     = require('gulp');
var notify   = require('gulp-notify');
var phpspec  = require('gulp-phpspec');

gulp.task('phpspec', function() {
	var options = {'verbose': 'v', notify: true, debug: true};
	gulp.src('spec/**/*.php')
		.pipe(phpspec('', options))
		.on('error', notify.onError({
			title: "Failed",
			message: "Check the errors..."
		}))
		.pipe(notify({
			title:'Success',
			message:"OK"
		}));
});

// set watch task to look for changes in test files
gulp.task('watch', function () {
	gulp.watch('spec/**/*.php', ['phpspec']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['phpspec', 'watch']);