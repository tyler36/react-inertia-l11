import { BaseLayout } from '../Layouts/BaseLayout';

export default function About(props) {
  return (
      <BaseLayout>
        <h1>This page is about {props.user.name}</h1>
        <pre>{JSON.stringify(props.user, null, 2)}</pre>
      </BaseLayout>
  )
}
