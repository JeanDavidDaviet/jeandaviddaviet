const path = require('path');
const TerserPlugin = require("terser-webpack-plugin");

const jsConfig = {
  entry: {
    main: [
      './src/js/index',
    ],
  },
  devtool: false,
  output: {
    path: path.resolve(__dirname, '../../dist/js'),
    filename: '[name].min.js',
  },
  module: {
    rules: [
      {
        test: /\.(ts|js)?$/,
        use: {
          loader: 'babel-loader',
        },
      },
    ],
  },
  optimization: {
    minimizer: [new TerserPlugin({ extractComments: false })],
  },
  externals: {
    jquery: 'jQuery',
  },
  plugins: [],
  resolve: {
    extensions: ['.ts', '.js'],
  },
};

module.exports = jsConfig;
