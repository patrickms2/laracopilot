<x-layouts::admin :title="'Nuevo producto'">

    <form onsubmit="alert('Available in Build mode'); return false;" class='grid gap-4 lg:grid-cols-3'>

        <div class='space-y-4 lg:col-span-2'>
            <div class='rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm'>
                <flux:heading size='lg'>Datos del producto</flux:heading>

                <div class='mt-5 grid gap-4'>
                    <flux:field>
                        <flux:label>Nombre</flux:label>
                        <flux:input placeholder='Malvasía Volcánica Seco' />
                    </flux:field>

                    <flux:field>
                        <flux:label>Descripción corta</flux:label>
                        <flux:input placeholder='Cosecha 2023 · 12,5%' />
                    </flux:field>

                    <div class='grid gap-4 sm:grid-cols-2'>
                        <flux:field>
                            <flux:label>Categoría</flux:label>
                            <flux:select>
                                <option>Vinos</option>
                                <option>Aloe Vera</option>
                                <option>Vinoterapia</option>
                                <option>Argán</option>
                                <option>Cochinilla</option>
                                <option>Packs</option>
                            </flux:select>
                        </flux:field>
                        <flux:field>
                            <flux:label>Proveedor</flux:label>
                            <flux:select>
                                <option>Bodega El Grifo</option>
                                <option>Bodega Rubicón</option>
                                <option>Aloe Plus Lanzarote</option>
                                <option>Teguise Artesanía</option>
                            </flux:select>
                        </flux:field>
                    </div>

                    <div class='grid gap-4 sm:grid-cols-3'>
                        <flux:field>
                            <flux:label>Precio (€)</flux:label>
                            <flux:input type='number' placeholder='14' />
                        </flux:field>
                        <flux:field>
                            <flux:label>Stock</flux:label>
                            <flux:input type='number' placeholder='120' />
                        </flux:field>
                        <flux:field>
                            <flux:label>IVA</flux:label>
                            <flux:select>
                                <option>IGIC 7%</option>
                                <option>IGIC 3%</option>
                                <option>Exento</option>
                            </flux:select>
                        </flux:field>
                    </div>

                    <flux:field>
                        <flux:label>URL de la imagen</flux:label>
                        <flux:input placeholder='https://…' />
                    </flux:field>
                </div>
            </div>

            <div class='rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm'>
                <flux:heading size='lg'>Recogida</flux:heading>
                <div class='mt-5 grid gap-4'>
                    <flux:field>
                        <flux:label>Punto de recogida</flux:label>
                        <flux:select>
                            <option>Bodega El Grifo · La Geria</option>
                            <option>Bodega Rubicón · Yaiza</option>
                            <option>Finca Los Verdes · Órzola</option>
                            <option>Mercadillo de Teguise</option>
                            <option>Tienda Puerto del Carmen</option>
                        </flux:select>
                    </flux:field>
                    <flux:checkbox checked label='Ofrecer automáticamente al reservar una visita a este punto' />
                    <flux:checkbox checked label='Permitir entrega en la villa del cliente' />
                    <flux:checkbox label='Requiere preparación con 24 h de antelación' />
                </div>
            </div>
        </div>

        <div class='space-y-4'>
            <div class='rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm'>
                <flux:heading size='lg'>Publicación</flux:heading>
                <div class='mt-5 grid gap-4'>
                    <flux:field>
                        <flux:label>Estado</flux:label>
                        <flux:select>
                            <option>Publicado</option>
                            <option>Borrador</option>
                            <option>Agotado</option>
                        </flux:select>
                    </flux:field>
                    <flux:checkbox checked label='Destacar en la tienda' />
                    <flux:checkbox label='Incluir en el Plan Full' />
                </div>
                <flux:button type='submit' variant='primary' class='mt-6 w-full'>Guardar producto</flux:button>
                <a href='/admin/products' class='mt-2 block rounded-lg px-4 py-2 text-center text-sm text-zinc-500 hover:bg-zinc-50'>Cancelar</a>
            </div>

            <div class='rounded-2xl border border-zinc-200 bg-[#FAF6EF] p-5'>
                <p class='text-xs font-medium text-zinc-700'>Sincronización</p>
                <p class='mt-1 text-[11px] leading-relaxed text-zinc-500'>Al guardar, el catálogo se publica al agente de tienda por webhook y queda disponible en el modo IA.</p>
            </div>
        </div>

    </form>

</x-layouts::admin>
