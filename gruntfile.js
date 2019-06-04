module.exports = function (grunt) {
        
    grunt.initConfig({
        purgecss: {
            general_purge: {
                options: {
                    content: [
                        'page-templates/**/*.php',
                        'page-templates/sections/*.php',
                        'header.php',
                        'footer.php',
                        'archive.php',
                        '404.php',
                        'author.php',
                        'category-blog.php',
                        'category.php',
                        'comments.php',
                        'index.php',
                        'page.php',
                        'search.php',
                        'sidebar.php',
                        'single-products.php',
                        'single.php',
                        'author.php',
                        'author.php',
                        'custom.js',
                        'functions.php',
                        'inc/*.php',
                        'template-parts/*.php'
                    ]
                },
                files: {
                    'home-purge.css': ['style-all.css']
                }
            }
        }
    });

	grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-purgecss');

}