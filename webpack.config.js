const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
    entry: {
        app: [
            path.resolve(__dirname, './resources/assets/app.js')
        ]
    },
    output: {
        path: path.resolve(__dirname, 'public/assets'),
        filename: 'js/scripts.min.js'
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: [{
                        loader: 'css-loader'
                    }, {
                        loader: 'postcss-loader'
                    }, {
                        loader: 'sass-loader'
                    }]
                })
            },
            {
                test: /\.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: './fonts/[name].[ext]'
                        }
                    }
                ]
            },
        ]
    },
    plugins: [
        new ExtractTextPlugin({
            filename: 'css/style.css'
        })
    ]
};
