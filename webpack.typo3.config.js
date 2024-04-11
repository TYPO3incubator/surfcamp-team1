const {CleanWebpackPlugin}   = require('clean-webpack-plugin');
const defaultConfig        = require('./webpack.production.config.js');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const Path                 = require('path');

var config = defaultConfig;

config.output.path     = Path.resolve(__dirname, './local_packages/corporate/Resources/Public/Dist');
config.output.filename = '[name].js';
config.watch = false;

config.plugins[0] = new CleanWebpackPlugin(
    {
        cleanOnceBeforeBuildPatterns: config.output.path,
        dangerouslyAllowCleanPatternsOutsideProject: true
    }
);

config.plugins[1] = new MiniCssExtractPlugin({
    filename: 'main.css',
    chunkFilename: '[id].css'
});

module.exports = config;
