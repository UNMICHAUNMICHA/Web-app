import React from 'react'
import Navbarpage from '../Navbar/page'

function loginpage() {
    return (
        <div className='container mx-auto'>
            <h3 className='text-center my-5 text-3xl'>
                Login
            </h3>
            <hr className='my-2.5 mr-40 ml-40 ' />
            <div className='container mx-auto'>
                <div className='flex justify-center'>
                    <form action="">
                        <input className="block bg-gray-300 rounded-md my-3 py-2 px-2" type="email" placeholder='Enter Email' />
                        <input className="block bg-gray-300 rounded-md my-3 py-2 px-2" type="password" placeholder='Enter password' />
                        <button className='block w-full bg-green-500 text-white py-2 px-3 rounded-md text-center max-sm:'>submit</button>
                    </form>
                </div>
                <div>

                </div>
            </div>
        </div>
    )
}

export default loginpage