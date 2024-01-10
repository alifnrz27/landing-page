function selectStore(option){
    document.getElementById('store-selected-'+option.value).classList.add('hidden');
    const selectedStoresContainer = document.getElementById('selected-store');
    const storeIdInput = document.getElementById('store-id');
    const storeId = storeIdInput.value;
    const trimmedString = storeId.trim();
    let stringArray = "";

    if(option.value == 0){
        const elements = document.querySelectorAll('.store-list');

        elements.forEach(element => {
            element.classList.add('hidden');
        });
        stringArray = option.value;
    }else{
        const dataArray = trimmedString ? trimmedString.split(",") : [];
        dataArray.push(option.value);

        stringArray = dataArray.join(",");
    }

    const selectedStoreDiv = document.createElement('div');
    selectedStoreDiv.className = 'px-2 py-1 bg-gray-400 rounded-full text-white flex mr-2';
    selectedStoreDiv.innerHTML = `
        <div class="w-[100px] truncate" style="-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;">
            ${document.getElementById('store-selected-'+option.value).innerHTML}
        </div>
        <div class="justify-end text-red-500 cursor-pointer" onclick="removeStore(this, ${option.value})" style="-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;">
            x
        </div>
    `;

    selectedStoresContainer.appendChild(selectedStoreDiv);

    storeIdInput.value = stringArray;
    Livewire.emit('updateStoreId', stringArray);
}

function selectAllStore(option){
    const elements = document.querySelectorAll('.store-list');

    elements.forEach(element => {
        element.classList.remove('hidden');
    });

    const selectedStoreDiv = document.createElement('div');
    selectedStoreDiv.className = 'px-2 py-1 bg-gray-400 rounded-full text-white flex mr-2';
    selectedStoreDiv.innerHTML = `
        <div class="w-[100px] truncate" style="-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;">
            Semua Toko
        </div>
        <div class="justify-end text-red-500 cursor-pointer" onclick="removeStore(this, ${option.value})" style="-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;">
            x
        </div>
    `;

    const selectedStoresContainer = document.getElementById('selected-store');
    selectedStoresContainer.innerHTML = '';

    const storeIdInput = document.getElementById('store-id');
    storeIdInput.value = 0;
    Livewire.emit('updateStoreId', stringArray);
}

function removeStore(element, id){
    if(id == 0){
        const elements = document.querySelectorAll('.store-list');

        elements.forEach(element => {
            element.classList.remove('hidden');
        });
    }
    const storeIdInput = document.getElementById('store-id');
    const storeId = storeIdInput.value;
    const trimmedString = storeId.trim();

    const dataArray = trimmedString ? trimmedString.split(",") : [];

    // Hapus data jika ada dalam array
    const dataStore = dataArray.filter((element) => element != id);;

    const stringArray = dataStore.join(",");
    storeIdInput.value = stringArray;
    Livewire.emit('updateStoreId', stringArray);

    const parentDiv = element.parentNode;
    parentDiv.remove();
    document.getElementById('store-selected-'+id).classList.remove('hidden');
}
