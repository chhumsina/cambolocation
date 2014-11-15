module.exports = function(grunt) {
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.initConfig({
        // Metadata.
        meta: {
            srcPath: '_source/',
            buildPath: '_build/',
            deployPath: '_deploy/'
        },
        watch: {
            js: {
                files: ['<%= meta.srcPath %>js/custom/*.js', 'Gruntfile.js'],
                tasks: ['concat', 'uglify']
            },
            scss: {
                files: ['<%= meta.srcPath %>sass/bootstrap.scss', '<%= meta.srcPath %>sass/_custom.scss'],
                tasks: ['sass', 'cssmin']
            }
        },
        sass: {
            dist: {
                files: {
                    '<%= meta.buildPath %>style.css': '<%= meta.srcPath %>sass/bootstrap.scss'
                }
            }
        },
        concat: {
            libs: {
                src: [
                    '<%= meta.srcPath %>js/libs/jquery-1.11.1.min.js',
                    '<%= meta.srcPath %>js/libs/handlebars.min.js',
                    '<%= meta.srcPath %>js/libs/jquery.storelocator.js'
                ],
                dest: '<%= meta.buildPath %>libs.js',
                options: {
                    separator: ';'
                }
            },
            js: {
                src: [
                    '<%= meta.srcPath %>js/custom/*.js'
                ],
                dest: '<%= meta.buildPath %>scripts.js',
                options: {
                    separator: ';'
                }
            },
            jsConcat: {
                src: ['<%= meta.buildPath %>libs.js', '<%= meta.buildPath %>scripts.js'],
                dest: '<%= meta.deployPath %>app.js',
                options: {
                    separator: ';'
                }
            }
        },
        uglify: {
            options: {
                compress: {
                    drop_console: true
                }
            },
            js: {
                src: '<%= meta.deployPath %>app.js',
                dest: '<%= meta.deployPath %>app.min.js'
            }
        },
        cssmin: {
            minify: {
                src: '<%= meta.buildPath %>style.css',
                dest: '<%= meta.deployPath %>style.min.css'
            }
        }
    });

    grunt.registerTask('build', ['sass', 'concat', 'uglify', 'cssmin']);
    grunt.registerTask('default', ['build', 'watch']);
};