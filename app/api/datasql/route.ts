import { PrismaClient } from '@prisma/client'

const prisma = new PrismaClient()

// export function GET() {
//     return Response.json({
//         message : "test"
//     })
// }


// export async function POST(request : Request) {
//     const { id, user } = await request.json()
//     return Response.json({
//         data:{
//             id,
//             user
//         }
//     })
// }


export async function GET() {
    const newGet = await prisma.post.findMany()
    return Response.json(newGet)
}


export async function POST(request : Request) {
    const { title, content } = await request.json()
    const newPost = await prisma.post.create({
        data: {
            title,
            content
        }
    })
    return Response.json(newPost)
}

