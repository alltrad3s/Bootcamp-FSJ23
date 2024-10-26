/* eslint-disable react/prop-types */
export const CardCountry = ({country}) => {
    return (
        <>
                <article className="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-20 lg:pt-30">
                    <img src={country.flags.png} alt="" className="absolute inset-0 -z-10 h-full w-full object-cover" />
                    <div className="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <div className="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    <div className="flex flex-col items-start gap-y-2 text-sm leading-6 text-white">
                    <div className="ml-1 flex items-center gap-x-3">
                        <div className="font-bold text-lg flex gap-x-2.5">
                            {country.name.common}
                        </div> - 
                        <div className="text-base flex gap-x-2.5">
                            {country.region}
                        </div>
                    </div>
                    <div className="ml-1 flex items-center gap-x-2.5">
                        <div className="font-base text-lg flex gap-x-2">
                            {country.capital}
                        </div> - 
                        <div className="text-base flex gap-x-2.5">
                            {/*Doing this will allow to show only the first language and not all, it also avoids the error*/}
                            {country.languages ? Object.values(country.languages)[0] : 'N/A'}
                        </div>
                    </div>
                    </div>
                </article>
        </>
    )
}