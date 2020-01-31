const getReviews = () => {
    
    const data = FB.api(
        
        "/Management.Ahmed.habashy/ratings",
        
        function (response) {

          if (response && !response.error) {

            // TODO: CODE HERE

          }

        }

    );
    
    console.log(data);

};
