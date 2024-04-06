import React from 'react'
import Link from 'next/link'

function Navbarpage() {
    return (
        <nav className="bg-gradient-to-r from-lime-500 to-cyan-500 text-white">
            <div className='container mx-auto py-5'>
                <div className='flex justify-between items-center'>
                    <div className=' text-2xl mx-3'>
                        <Link href="../../">NextJs</Link>
                    </div>
                    <ul className='flex mx-3 text-1xl'>
                        <li className='mx-3'><Link href="./login">login</Link></li>
                        <li className='mx-3'><Link href="./register">regsiter</Link></li>
                    </ul>
                </div>
            </div>
        </nav>
    )
}

export default Navbarpage