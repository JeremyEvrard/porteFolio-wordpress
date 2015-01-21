module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            dist: {
                src: [
                    'js/libs/*.js', // All JS in the libs folder
                    'js/*.js'  // This specific file
                ],
                dest: '../js/production.js'
            }
        },
        uglify: {
            build: {
                src: '../js/production.js',
                dest: '../js/production.min.js'
            }
        },
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: '../images'
                }]
            }
        },
        sass: {
            dist: {
                options: {
                    style: 'nested', //nested compressed
                    compass: true,
                    require: 'susy'
                },
                files: {
                    '../style.css': 'scss/style.scss'
                }
            }
        },
        jshint: {
            all: ['Gruntfile.js', 'js/*.js']
        },
        watch: {
            options: {
                livereload: true
            },
            scripts: {
                files: ['js/*.js'],
                tasks: ['jshint','concat', 'uglify'],
                options: {
                    spawn: false
                }
            },
            css: {
                files: ['scss/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false
                }
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-imagemin');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat','uglify','imagemin','sass']);

};
