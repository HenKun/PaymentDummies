# PaymentDummies

Creates Payment Dummies for backend order creation. 

- ** PayPal and SofortÜberweisung Dummy Payment Methods **

If you have to transfer orders from other systems (e.g. Dawanda in our case) to Magento manually and must keep the payment method (e.g. for accounting or analytic reasons)
you cannot choose these payment providers in backend by default.

With this extension there are two new payment methods you can choose in backend (and only in backend!) which reflects the actual payment method the customer has chosen on the external market place.

For further analytics or accounting you have to do a stripos on these methods or some other logic to combine these with the internal PayPal and SofortÜberweisung methods.