import React from 'react'
import Link from 'next/link'
export default function page() {
  return (
    <div className=' bg-gradient-to-r from-[#b0ef69f3] from-10% to-[#0c969d] to-90% min-h-screen'>
      <div className='py-40 text-white text-center  pb-5 text-4xl'>
        Welcome Gps Ku
      </div>
      <hr className='py-20 ml-20 mr-20' />
      <div className='container mx-auto'>
        <ul className='grid grid-cols-2 gap-1 content-center'>
            <button className=' bg-[hsl(159,32%,43%)] text-white mx-auto py-10 px-10 rounded-xl'><Link href="./components/login">Driver</Link></button>
            <button className=' bg-[hsl(159,32%,43%)] text-white mx-auto py-10 px-10 rounded-xl'>User</button>
        </ul>
      </div>
    </div>
  )
}
