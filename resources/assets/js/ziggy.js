    var Ziggy = {
        namedRoutes: {"pages.index":{"uri":"page\/pages","methods":["GET","HEAD"],"domain":null},"pages.create":{"uri":"page\/pages\/create","methods":["GET","HEAD"],"domain":null},"pages.store":{"uri":"page\/pages","methods":["POST"],"domain":null},"pages.show":{"uri":"page\/pages\/{page}","methods":["GET","HEAD"],"domain":null},"pages.edit":{"uri":"page\/pages\/{page}\/edit","methods":["GET","HEAD"],"domain":null},"pages.update":{"uri":"page\/pages\/{page}","methods":["PUT","PATCH"],"domain":null},"pages.destroy":{"uri":"page\/pages\/{page}","methods":["DELETE"],"domain":null},"users.index":{"uri":"user\/users","methods":["GET","HEAD"],"domain":null},"users.create":{"uri":"user\/users\/create","methods":["GET","HEAD"],"domain":null},"users.store":{"uri":"user\/users","methods":["POST"],"domain":null},"users.show":{"uri":"user\/users\/{user}","methods":["GET","HEAD"],"domain":null},"users.edit":{"uri":"user\/users\/{user}\/edit","methods":["GET","HEAD"],"domain":null},"users.update":{"uri":"user\/users\/{user}","methods":["PUT","PATCH"],"domain":null},"users.destroy":{"uri":"user\/users\/{user}","methods":["DELETE"],"domain":null},"login":{"uri":"login","methods":["GET","HEAD"],"domain":null},"logout":{"uri":"logout","methods":["POST"],"domain":null},"register":{"uri":"register","methods":["GET","HEAD"],"domain":null},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"],"domain":null},"password.email":{"uri":"password\/email","methods":["POST"],"domain":null},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"],"domain":null},"home":{"uri":"home","methods":["GET","HEAD"],"domain":null}},
        baseUrl: 'http://localhost:8000/',
        baseProtocol: 'http',
        baseDomain: 'localhost',
        basePort: 8000
    };

    export {
        Ziggy
    }
