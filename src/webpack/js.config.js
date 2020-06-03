/* eslint-disable import/no-extraneous-dependencies */
const path = require('path');
const MinifyPlugin = require("babel-minify-webpack-plugin");

const jsConfig = {
  entry: {
    main: [
      './src/js/index',
    ],
  },
  output: {
    path: path.resolve(__dirname, '../../dist/js'),
    filename: '[name].js',
  },
  module: {
    rules: [
      {
        test: /\.(ts|js)?$/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: [
              ['@babel/preset-typescript', { modules: false }],
            ],
          },
        },
      },
    ],
  },
  optimization: {

  },
  externals: {
    $: '$',
    jquery: 'jQuery',
  },
  plugins: [new MinifyPlugin()],
  resolve: {
    extensions: ['.ts', '.js'],
  },
};

module.exports = jsConfig;
