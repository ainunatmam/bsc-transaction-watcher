# bsc-transaction-watcher
### Watch new transaction from binance smartchain address realtime. ###
I don't want to call this a tool because this is not a tool actually. But i think it will be a little help for those in need

## How to use ##

1. You must have an account on bscscan, if you don't have one then please create one first. just search on google bscscan.
2. From your Account Dashboard, click on the navigation tab labelled  API-KEYs.
3. From there, you may click on Add to create a new key and give a name to your project. Each BscScan account is limited to creating 3 keys at any one time.
![Example API KEY](https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-MhnuKDbN7YmreAdjefb%2F-Midz8NX8tiJ25tJVVbP%2F-Mie6jMBVAUq0QE7LxKZ%2FAPI%20Keys%20section.png?alt=media&token=95f4571a-17fa-4b8f-aae4-f4d84bb584dc)
4. After that, copy your api key and paste it into all backend.php files.
5. Then add the address of the bsc you want to monitor.
6. To run it you must have a local server like XAMPP or whatever. put the master folder into the htdoc folder(if you are using xampp) and run index.php or via browser url "http://localhost/bsc-transaction-watcher/index.php"
7. Now you can see the transactions that have been done. successful transactions will be green while failed transactions are red.
8. New transactions under uhm.. 1 hour in the time column will turn dark red.
