module.exports = {
    syntax: require('postcss-scss'),
    plugins: [
        require('precss'),
        require('postcss-cssnext')({
            browsers: [
                "last 3 versions",
                "ie 10-11"
            ]
        })
    ]
};
