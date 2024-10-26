import { CardCountry } from "./CardCountry"

// Utilizamos los props
// eslint-disable-next-line react/prop-types
export const ListCountries = ({countries}) => {
    return (
        <>
            <div className="bg-white mt-8">
                <div className="mx-auto max-w-12xl sm:px-6 lg:px-8">
                    <div className="mx-auto max-w-2xl text-center">
                    <h2 className="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Countries FSJ23</h2>
                    <p className="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
                    </div>
                        <div className="mx-auto mt-2 grid max-w-7xl auto-rows-fr grid-cols-1 gap-8 sm:mt-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                            {
                                // eslint-disable-next-line react/prop-types
                                countries.map( (country,index) => {
                                    return <div key={index}><CardCountry country={country}/></div> } )
                            }
                        </div>
                    </div>
            </div>
        </>
    )

}