//Custom Hook -> Es una funcion la cual es CREADA POR UN DESARROLLADOR de este proyecto
// El objetivo es realizar una tarea especifica.
// Puede tener sintaxis JS, o aprovechar las bondades JSX (useEffect, useState)
import { useEffect, useState } from "react"

export const useCountriesData = (region, name) => {
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
        let filteredCountries = countryData;
        if (region){
            filteredCountries = filteredCountries.filter((country) => country.region === region)
        }    

        if (name){
            filteredCountries = filteredCountries.filter((country) => country.name.common === name)
        }

        setTimeout(() => {//Simulamos carga de datos para que tome tiempo antes de mostrar la data
            setCountries(filteredCountries);
        }, 3000);
    }

    useEffect(()=> {
        //console.log("Hola Hola");
        fetchCountries();
        //console.log(countries);
    },[region, name] //Array de dependencia. Se ejecuta cuando esto cambie, si esta vacio, no tiene a que escuchar y no se va a ejecutar.
) 

    return countries;

}