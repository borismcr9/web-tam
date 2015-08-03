'use strict';

module.exports = function(grunt) {
    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            options: {
                livereload: true
            },
            css: {
                files: ['less/**/*.less', 'protected/views/**/*.php'],
                tasks: ['']
            }
        },
        /* IMAGEMIN FAILS, WAIT FOR SOMEONE FIX IT :( */
        imagemin: {
            dist: {
                // Target options
                options: {
                    optimizationLevel: 3
                },
                files: [{
                    expand: true,
                    cwd: 'images',
                    src: '{,*/}*.{gif,jpeg,jpg,png}',
                    dest: 'images-dist'
                }]
            }
        }
    });

    // grunt.loadNpmTasks('grunt-contrib-watch');
};
