import { useCountriesData } from "../hooks/useCountriesData"
import { ListCountries } from "../countries/components/ListCountries"
import { useState } from "react";
import { useRegions } from "../hooks/useRegions";
import { LoadingComponent } from "../components/LoadingComponent";

export const Countries = () => {
    const [region,setRegion] = useState('');
    const [name, setName] = useState('');
    //recibiendo la informacion del hook useContriesData
    let countries = useCountriesData(region, name);
    let uniqueRegions = useRegions();

    return(
        <>
        <form className="w-full max-w-lg">
            <div className="flex flex-wrap -mx-3 mb-6">
                <div className="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label htmlFor="region" className="block text-gray-700 text-sm mb-2">
                        <p className="mt-2 text-lg leading-8 font-bold text-gray-600">Filter by Region</p>
                            <select onChange={(e) => setRegion(e.target.value)} id="region" name="region" className="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="">All</option>
                                {uniqueRegions.map(region => (
                                    <option key={region} value={region}>{region}</option>
                                ))}
                            </select>
                    </label>
                </div>          
                <div className="w-full md:w-1/2 px-3">
                        <label className="block text-gray-700 text-sm mb-2">
                            <p className="mt-2 text-lg leading-8 font-bold text-gray-600">Country</p>
                        </label>
                        <input className="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="Country"
                            onChange={(e) => setName(e.target.value)}
                        />
                </div>
            </div>
        </form>
            {/*Renderizado condicional -> Opcion de mostrar un dato u otro */}
            { countries.length > 0 ? <ListCountries countries = {countries} /> : <LoadingComponent />}
        </>
    )
}