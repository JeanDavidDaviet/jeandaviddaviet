/* eslint-disable import/no-extraneous-dependencies */
const webpack = require('webpack');
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const postcssPresetEnv = require('postcss-preset-env');
const FixStyleOnlyEntriesPlugin = require('webpack-fix-style-only-entries');

const devMode = process.argv.indexOf('development') !== -1; // In development mode ?

const cssConfig = {
  entry: './src/sass/main.scss',
  output: {
    path: path.resolve(__dirname, '../../dist/css')
  },
  devtool: devMode ? 'source-map' : '',
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: 'css-loader',
          },
          {
            loader: 'group-css-media-queries-loader',
          },
          {
            loader: 'sass-loader',
          },
          {
            loader: 'postcss-loader',
            options: {
              ident: 'postcss',
              plugins: () => [
                postcssPresetEnv({ stage: 0 }),
              ],
            },
          },
          // Note that the loaders are ordered from bottom to top or right to left.
          // Loaders act like functions, that’s why it’s from right to left.
          // For example, css-loader(postcss-loader(sass-loader(resource)))
        ],
      },
      {
        test: /.(jpg|png)(\?[a-z0-9=\.]+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '../img/[hash].[ext]',
            },
          },
        ],
      },
      {
        test: /.(woff(2)?|eot|ttf|svg)(\?[a-z0-9=\.]+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '../font/[hash].[ext]',
            },
          },
        ],
      },
      {
        test: /.(svg)(\?[a-z0-9=\.]+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '../svg/[hash].[ext]',
            },
          },
        ],
      },
      {
        test: /\.(php)$/,
        use: [
          {
            loader: 'html-loader',
            options: {
              attrs: ['img:src'],
            },
          },
        ],
      },
    ],
  },
  optimization: {},
  plugins: [
    new FixStyleOnlyEntriesPlugin(),
    new MiniCssExtractPlugin({
      filename: 'main.css',
    }),
    new webpack.optimize.LimitChunkCountPlugin({
      maxChunks: 1,
    }),
  ],
};

module.exports = cssConfig;
