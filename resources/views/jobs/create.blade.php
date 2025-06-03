<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action='/jobs'>
        <x-forms.input label='title' name='title' placeholder='CEO' />
        <x-forms.input label='salary' name='salary' placeholder='$90,000 USD' />
        <x-forms.input label='location' name='location' placeholder='Winter Park, Florida' />

        <x-forms.select label='Schedule' name='Schedule'>
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>

        <x-forms.input label='URL' name='url' placeholder='https://harikrishnakhuju.com.np/' />
        <x-forms.checkbox label='Feature (Costs Extra)' name='featured'/>

        <x-forms.divider/>

        <x-forms.input label='Tags (comma separated)' name='tags' placeholder='Programmer,video, eduation' />
        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
