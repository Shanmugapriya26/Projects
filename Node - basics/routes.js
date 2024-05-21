const fs = require('fs');
const reqlistener = (req,res)=>{
    let url = req.url;
    let method = req.method;
    if(url==='/'){
        res.setHeader('Content-type','text/html');
        res.write('<html><title>Node</title><body><h1>Welcome</h1><br><form action="/next" method="POST"><label for="name">Name:</label><br><input type="text" name="name"><input type="submit" value="submit"></form></body></html>');
        return res.end();
    }
    if(url==='/next' && method=='POST')
    {
        const body = [];
        req.on('data',(chunk)=>{
            body.push(chunk);
        })
        return req.on('end',()=>{
            const data = Buffer.concat(body).toString();
            const msg = data.split('=');
            console.log(msg[1]);
            fs.writeFile('hello.txt',msg[1],()=>{
                res.setHeader('Location','/');
                res.statusCode = 302;
                return res.end();
            })
            
        })
    }
    res.setHeader('Content-type','text/html');
    res.write('<html><title>Node</title><body><h1>Welcome</h1></body></html>');
    res.end();
}
    
//module.exports = reqlistener;

exports.handler = reqlistener;