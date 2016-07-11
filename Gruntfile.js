module.exports = function(grunt) {

    // NPM plugins configuration
    grunt.initConfig({
        cssmin:{
            production:{
                files: [{
                    dest: '',
                    expand: true,
                    ext: '.min.css',
                    src: 'style.css'
                }]
            }
        },
        compass: {
            files: {
                'style.css' : 'sass/style.scss'
            },
            options: {
                noLineComments: true,
                outputStyle: 'expanded',
                require: 'susy',
                sassDir: 'sass',
                watch: false
            }
        },
        watch:{
            less:{
                files: ['sass/**/*.scss'],
                tasks: ['compass'],
                options: {
                    spawn: false
                }
            }
        }
    });

    // Load the NPM plugins
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Register Tasks
    grunt.registerTask('build', ['cssmin:production']);
};