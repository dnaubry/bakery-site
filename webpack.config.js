const path = require('path');

module.exports = {
    entry: {
        App: "./scripts/main.js"
    },
    output: {
        path: path.resolve(__dirname, './'),
        filename: "main.js"
    },
    module: {
        loaders: [
            {
                test: /\.js$/,
                exclude: /node_modules/
            }
        ]
    }
}
