const webpack = require('webpack');
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FixStyleOnlyEntriesPlugin = require('webpack-fix-style-only-entries');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');

const cssConfig = {
  entry: './src/sass/main.scss',
  output: {
    path: path.resolve(__dirname, '../../dist/css'),
    publicPath: '../../dist',
  },
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
        ],
      },
      {
        test: /.(jpg|png)(\?[a-z0-9=\.]+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '/img/[name].[ext]',
            },
          },
        ],
      },
      {
        test: /.(woff(2)?|eot|ttf)(\?[a-z0-9=\.]+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '/fonts/[name].[ext]',
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
              name: '/svg/[name].[ext]',
            },
          },
        ],
      },
    ],
  },
  optimization: {
    minimize: true,
    minimizer: [
      new CssMinimizerPlugin(),
    ],
  },
  plugins: [
    new FixStyleOnlyEntriesPlugin(),
    new MiniCssExtractPlugin({
      filename: 'main.min.css',
    }),
    new webpack.optimize.LimitChunkCountPlugin({
      maxChunks: 1,
    }),
  ],
};

module.exports = cssConfig;
