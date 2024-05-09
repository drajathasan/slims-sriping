import fs from 'fs'
import path from 'path'

const __dirname = path.dirname(process.cwd())
const destDir = __dirname + '/template/'

function copyIfIsFile(scanPath, targetDir)
{
    let list = fs.readdirSync(scanPath)
    
    
    list.forEach((item) => {
        let fullPath = scanPath + item
        let dest = targetDir + item
        let src = scanPath + item

        if (fs.lstatSync(fullPath).isDirectory()) {
            fs.mkdirSync(dest)
            copyIfIsFile(src + '/', dest + '/')
        } else {
            dest = dest.replace('.html', '.php')
            fs.copyFileSync(src, dest)
        }

    })
}

if (!fs.existsSync(destDir)) {
    let fullPath = __dirname + '/template-src/.output/public/'

    fs.mkdirSync(destDir)

    copyIfIsFile(fullPath, destDir)

    // fs.rmdirSync(destDir)
}

