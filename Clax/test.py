import asyncio
from bleak import BleakClient

async def run():
    mac_address = "27539C43-9C3F-FC56-BA90-22F58C6559C7"  # Replace with your Chipolo's MAC address
    characteristic_uuid = "94110001-6d9b-4225-a4f1-6a4a7f01b0de"

    async with BleakClient(mac_address) as client:
        value = await client.read_gatt_char(characteristic_uuid)
        print(f'Value: {value} (bytes)')
        value_str = value.decode('utf-8')
        print(f'Value: {value_str}')

if __name__ == "__main__":
    asyncio.run(run())
