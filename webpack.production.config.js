const CleanWebpackPlugin        = require('clean-webpack-plugin');
const defaultConfig             = require('./webpack.config.js');
const CSSMinimizerWebpackPlugin = require('css-minimizer-webpack-plugin');
const Path                      = require('path');
const TerserPlugin              = require("terser-webpack-plugin");

var config = defaultConfig;

config.devtool = false
config.mode = 'production';
config.optimization = {
    minimizer: [
        new CSSMinimizerWebpackPlugin(),
        new TerserPlugin({
            parallel: true,
            extractComments: true
        }),
    ]
}

module.exports = config;
