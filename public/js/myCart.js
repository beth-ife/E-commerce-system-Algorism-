
//simpleCart.checkoutTo = PayPal;
//simpleCart.email = "";

simpleCart.currency({
    code: "&#8358;",
    name: "Naira",
    symbol: " NGN",
    delimiter: ",",
    decimal: "."
   // after: true,
    //accuracy: 3
});

simpleCart({
    cartColumns: [
        
        { attr: "name" , label: "Name" } ,
        {view:'image' , attr:'thumb', label: false},
        { attr: "price" , label: "Price", view: 'currency' } ,
        { view: "decrement" , label: false , text: "-" } ,
        { attr: "quantity" , label: "Qty" } ,
        { view: "increment" , label: false , text: "+" } ,
        { attr: "total" , label: "SubTotal", view: 'currency' } ,
        { view: "remove" , text: "Remove" , label: false }
        
        
    ],
    cartStyle: "table"
});

simpleCart({
    checkout: { 
        type: "SendForm" , 
        url: "/checkout" 
        
        
    } 
    
});
simpleCart.bind( 'beforeCheckout' , function( ){
  simpleCart.empty();
});
   