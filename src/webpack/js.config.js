/* eslint-disable import/no-extraneous-dependencies */
const path = require('path');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

const devMode = process.argv.indexOf('development') !== -1; // In development mode ?

const jsConfig = {
  entry: {
    main: [
      './src/js/index.ts',
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
              ['@babel/preset-env', { modules: false }],
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
  plugins: [],
  resolve: {
    extensions: ['.js'],
  },
};

if (devMode) {
  jsConfig.devtool = 'source-map';
  jsConfig.cache = true;
} else {
  jsConfig.cache = false;
  jsConfig.optimization.minimizer = [
    new UglifyJsPlugin({
      sourceMap: false,
      uglifyOptions: {
        compress: {
          sequences: true,
          dead_code: true,
          conditionals: true,
          booleans: true,
          unused: true,
          if_return: true,
          join_vars: true,
          drop_console: true,
        },
      },
    }),
  ];
}

module.exports = jsConfig;
