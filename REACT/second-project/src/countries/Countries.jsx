import { useEffect, useState } from "react"

export const Countries = () => {
    //useEffect -> Ejecutar algo al momento de montar un componente
    // --> Sincronizar datos, ejecutar algo en fase de actualizacion

    //Hacemos usos de los estados, con la palabra countries la reservamos y setCountries es el estado que 
    //utilizamos para guardar datos de la API que estamos consultando para pasar la informacion a los componentes 
    //que lo necesiten
    const [countries, setCountries] = useState([]);

    const fetchCountries = async () => { //Con async le indicamos a la funcion que vamos a utilizar los await
        let response = await fetch('https://restcountries.com/v3.1/all'); // Utilizamos await para que espere la respuesta.
        let countryData = await response.json(); // Await nuevamente para que espere la respues y al recibirla, nos la muestre y la parsee a json
        //console.log(response);
        //console.log(countryData);
        setTimeout(() => {//Simulamos carga de datos para que tome tiempo antes de mostrar la data
            setCountries(countryData);
        }, 3000);
    }

    useEffect(()=> {
        //console.log("Hola Hola");
        fetchCountries();
        //console.log(countries);
    },[] //Array de dependencia. Se ejecuta cuando esto cambie, si esta vacio, no tiene a que escuchar y no se va a ejecutar.
) 

    return(
        <>
            <h1>Countries FSJ23</h1>
            {/*Renderizado condicional -> Opcion de mostrar un dato u otro */}
            { countries.length > 0 ? countries.map( (country,index) => {
               return <h3 key={index} >{country.name.common}</h3> } ) : (
                <div className="flex flex-col items-center">
                  <iframe src="https://lottie.host/embed/d075c402-1ed0-45c3-83b5-e19c8129ec40/oO1BA53nqt.json"></iframe>
                  <h1>Loading...</h1>
                </div>
              )
            }
        </>
    )
}