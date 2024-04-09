const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

module.exports = {
    entry: ['./local_packages/corporate/Resources/Public/src/app.js', './local_packages/corporate/Resources/Public/src/scss/app.scss'],
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, './local_packages/corporate/Resources/Public/Dist'),
    },
    devServer: {
        static: {
            directory: path.join(__dirname, "src"),
        },
        host: '0.0.0.0',
        open: true,
        hot: true
    },
    devtool: 'eval-source-map',
    target: 'web',
    mode: 'development',
    resolve: {
        extensions: ['.hbs', '.js', '.scss'],
        alias: {
            "@": path.resolve(__dirname, "src"),
        },
    },
    watch: true,
    watchOptions: {
        aggregateTimeout: 200,
        poll: 1000,
        ignored: '**/node_modules',
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
    module: {
        rules: [
            {
                test: /\.(s?css)$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: "css-loader",
                        options: {
                            sourceMap: true,
                        },
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            sourceMap: true,
                        },
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            sourceMap: true,
                        },
                    },
                ],
            },
            {
                test: /\.(jpeg|jpg|png|svg|gif)$/,
                type: "asset/resource",
                generator: {
                    filename: "images/[name][ext][query]",
                },
            },
            {
                test: /\.mp4$/,
                type: "asset/resource",
                generator: {
                    filename: "media/[name][ext][query]",
                },
            },
            {
                test: /\.(woff(2)?|ttf|otf|eot)(\?v=\d+\.\d+\.\d+)?$/,
                type: "asset/resource",
                generator: {
                    filename: "fonts/[name][ext][query]",
                },
            },
        ],
    },
}
