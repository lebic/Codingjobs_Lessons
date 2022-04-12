/**
 * Arrow function
 * $
 * (params) => {}
 * 
 *
 **/
// original syntax 
const func1 = function (params {
    // intructions
})

// ES6 syntax, shorter but has another consequence
//rebind this outter "this "context" to the function.
//When calling such function, its "this" context will be the one from outside ! Forger about it for now!
const func2 = (params1 , params2) => {
// instructions
}

// if only one param, you can ommit the ()
const func3 = params => {
    // instructions
    }

