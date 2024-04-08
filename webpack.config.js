const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

module.exports = {
    entry: './local_packages/corporate/Resources/Public/src/app.js',
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, './local_packages/corporate/Resources/Public/Dist'),
    },
    plugins: [
        // must be on position 0 for overriding in webpack.typo3.config.js
        new CleanWebpackPlugin(),
        // must be on position 1 for overriding in webpack.typo3.config.js
        new MiniCssExtractPlugin({
            filename: '[name].css',
            chunkFilename: '[id].css'
        }),
    ],
}
