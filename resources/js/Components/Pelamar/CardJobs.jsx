import PrimaryButton from "../PrimaryButton"

const isJobs = (jobs) => {
    return jobs.map((data, i) => {
        return (
            <div key={i} className="card w-full lg:w-96 bg-white shadow-xl">
                <div className="card-body">

                    <h4 className="card-title text-black h-9">
                        <div className="avatar shadow shadow-sm shadow-black mr-2 mt-8">
                            <div className="w-16">
                                <img src="/img/jayandraLogo.png" alt="Tailwind-CSS-Avatar-component" />
                            </div>
                        </div>
                        {data.job_position}
                    </h4>
                    {/* <p className="text-black ml-20 h-2 ">{data.compeny.name.length ? data.compeny.name : 'PT Tujuh Sembilan' }</p> */}
                    <div className="pt-7">

                        <p className="text-black badge badge-outline mb-3 mr-2">{data.location}</p>
                        <p className="text-black badge badge-outline">{data.job_position}</p>
                        <p className="text-black">Gajih: Rp. {data.salary} /bln</p>
                        <div className="card-actions justify-end">
                            <PrimaryButton className="mt-5">Detail Pekerjaan</PrimaryButton>
                        </div>
                    </div>
                </div>
            </div>
        )
    })
}

const noJobs = () => {
    return (
        <div>Maaf, Lowongan Kerja Belum Tersedia !</div>
    )
}

const CardJobs = ({ jobs }) => {
    return !jobs ? noJobs() : isJobs(jobs)
}

export default CardJobs