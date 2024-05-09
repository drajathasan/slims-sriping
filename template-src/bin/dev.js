import fs from 'fs'

if (!fs.existsSync('./env.json')) {
    fs.copyFileSync('./env.sample.json', './env.json')
}