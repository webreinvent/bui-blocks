const path = require('path');
const partial_import = require('postcss-partial-import');

let block_path = "./email/email-with-stats";

module.exports = {
    mode: process.env.NODE_ENV === 'production' ? 'production' : 'development',
    entry: [block_path+'/sass/style.scss'],
    output: {
        path: __dirname
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: './email/email-with-stats/css/style.css',
                        }
                    },
                    {
                        loader: 'extract-loader'
                    },
                    {
                        loader: 'css-loader?-url'
                    },
                    {
                        loader: 'postcss-loader'
                    },
                    {
                        loader: 'sass-loader'
                    }
                ]
            }
        ]
    }
};