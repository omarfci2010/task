# HotelsSearch

This RESTful API to allow search and sorting by name and price or nosorting  in the given inventory by any of the following :

 - Hotel [Name] => api/hotels/search/name=Rotana Hotel&name(price or no)sorting
 - Destination [City] =>/hotels/search/minprice=80&maxprice=150&name(price or no)sorting
 - Price range [ex: $80:$150] => api/hotels/search/minprice=80&maxprice=150&name(price or no)sorting
 - Date range [ex: 10-10-2020:20-10-2020] => api/hotels/search/datefrom=10-10-2020&dateto=20-10-2020&pricesorting


and allow sorting by:

- Hotel Name 
- Price

# Installing


 - installing wampserver PHP 7.
 - installing code editor to run app ex:visual studio code.
 - composer install in the project directory.
 - Run php artisan serve in the project directory by cmd and run the app on your browser.
 
# Examples

-Searching a hotel name with sorting by price 
  
    /api/hotels/search/name=Rotana Hotel&pricesorting
            
     

    [name] => Rotana Hotel
    [price] => 80.6
    [city] => cairo
    [availability] => Array
        (
            [0] => Array
                (
                    [from] => 10-10-2020
                    [to] => 12-10-2020
                )

            [1] => Array
                (
                    [from] => 25-10-2020
                    [to] => 10-11-2020
                )

            [2] => Array
                (
                    [from] => 05-12-2020
                    [to] => 18-12-2020
                )

  -Searching a hotel by date rang with sorting by price 
     
     /api/hotels/search/datefrom=10-10-2020&dateto=20-10-2020&pricesorting
   
    [name] => Concorde Hotel
    [price] => 79.4
    [city] => Manila
    [availability] => Array
        (
            [0] => Array
                (
                    [from] => 10-10-2020
                    [to] => 19-10-2020
                )

            [1] => Array
                (
                    [from] => 22-10-2020
                    [to] => 22-11-2020
                )

            [2] => Array
                (
                    [from] => 03-12-2020
                    [to] => 20-12-2020
                )
                
                
                

        
        
   -Searching a hotel by date rang with sorting by name 
     
     /api/hotels/search/datefrom=10-10-2020&dateto=20-10-2020&namesorting
          
                      
    [name] => Media One Hotel
    [price] => 102.2
    [city] => dubai
    [availability] => Array
        (
            [0] => Array
                (
                    [from] => 10-10-2020
                    [to] => 15-10-2020
                )

            [1] => Array
                (
                    [from] => 25-10-2020
                    [to] => 15-11-2020
                )

            [2] => Array
                (
                    [from] => 10-12-2020
                    [to] => 15-12-2020
                )

 

    [name] => Rotana Hotel
    [price] => 80.6
    [city] => cairo
    [availability] => Array
        (
            [0] => Array
                (
                    [from] => 10-10-2020
                    [to] => 12-10-2020
                    
-Searching a hotel by price rang with sorting by price

             /api/hotels/search/minprice=70&maxprice=100&pricesorting


    [name] => Concorde Hotel
    [price] => 79.4
    [city] => Manila
    [availability] => Array
        (
            [0] => Array
                (
                    [from] => 10-10-2020
                    [to] => 19-10-2020
                )

            [1] => Array
                (
                    [from] => 22-10-2020
                    [to] => 22-11-2020
                )

            [2] => Array
                (
                    [from] => 03-12-2020
                    [to] => 20-12-2020
                )

        )



    [name] => Rotana Hotel
    [price] => 80.6
    [city] => cairo
    [availability] => Array
        (
        
        
   -Searching a hotel by price rang with sorting by price

             /api/hotels/search/minprice=70&maxprice=100&nosorting
             
             
    [name] => Rotana Hotel
    [price] => 80.6
    [city] => cairo
    [availability] => Array
        (
            [0] => Array
                (
                    [from] => 10-10-2020
                    [to] => 12-10-2020
                )

            [1] => Array
                (
                    [from] => 25-10-2020
                    [to] => 10-11-2020
                )

            [2] => Array
                (
                    [from] => 05-12-2020
                    [to] => 18-12-2020
                )

        )

    [name] => Le Meridien
    [price] => 89.6
    [city] => london
    [availability] => Array
             
