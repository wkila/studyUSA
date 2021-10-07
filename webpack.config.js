const HTMLPlugin = require('html-webpack-plugin')

module.exports = {
    entry: ['./src/source.js'],
    output: {
        path: __dirname + '/dist',
        filename: 'bundle.js'
    },
    devServer: {
        contentBase: __dirname + '/dist'
    },
    plugins: [
        new HTMLPlugin({
            filename: 'index.php',
            template: './src/source.php'
        })
    ],
    resolve: {
        extensions: ['.js']
    }
}